<template>
  <div>
    <jet-action-section>
      <template #title>
        Create a Release
      </template>

      <template #description>
        Create a new release.
      </template>

      <template #content>
        <jet-button @click="creatingRelease = true">
          Create a new Release
        </jet-button>
      </template>
    </jet-action-section>

    <div v-if="releases.length > 0">
      <jet-section-border />

      <!-- Manage API Tokens -->
      <div class="mt-10 sm:mt-0">
        <jet-action-section>
          <template #title>
            Releases
          </template>

          <template #description>
            List of releases.
          </template>

          <!-- API Token List -->
          <template #content>
            <div class="space-y-6">
              <div v-for="release in releases" :key="release.id" class="flex items-center justify-between">
                <div>
                  {{ release.release_number }}
                </div>

                <div class="text-sm text-gray-400">
                  {{ formatDate(release.released_on) }}
                </div>

                <div class="flex items-center">
                  <button class="cursor-pointer ml-6 text-sm text-gray-400 underline"
                          @click="openUpdateRelease(release)"
                  >
                    Update
                  </button>

                  <button class="cursor-pointer ml-6 text-sm text-red-500" @click="openDeleteRelease(release)">
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </template>
        </jet-action-section>
      </div>
    </div>

    <!-- Release creation Modal -->
    <jet-dialog-modal :show="creatingRelease" @close="creatingRelease = false">
      <template #title>
        Create a Release
      </template>

      <template #content>
        <!-- Version -->
        <div class="col-span-6 sm:col-span-4">
          <jet-label for="version" value="Version" />
          <jet-input id="version" v-model="createReleaseForm.version" type="text" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="createReleaseForm.errors.version" class="mt-2" />
        </div>

        <!-- Date -->
        <div class="col-span-6">
          <jet-label for="released_on" value="Date of release" />
          <jet-input id="released_on" v-model="createReleaseForm.released_on" type="date" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="createReleaseForm.errors.released_on" class="mt-2" />
        </div>

        <!-- Release note -->
        <div class="col-span-6">
          <jet-label for="notes" value="Release note" />
          <jet-textarea id="notes" v-model="createReleaseForm.notes" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="createReleaseForm.errors.notes" class="mt-2" />
        </div>
      </template>

      <template #footer>
        <jet-secondary-button @click="creatingRelease = null">
          Cancel
        </jet-secondary-button>

        <jet-button class="ml-2" :class="{ 'opacity-25': createReleaseForm.processing }" :disabled="createReleaseForm.processing" @click="createRelease">
          Save
        </jet-button>
      </template>
    </jet-dialog-modal>

    <!-- Release update Modal -->
    <jet-dialog-modal :show="updatingRelease" @close="updatingRelease = false">
      <template #title>
        Update a Release
      </template>

      <template #content>
        <!-- Version -->
        <div class="col-span-6 sm:col-span-4">
          <jet-label for="version" value="Version" />
          <jet-input id="version" v-model="updateReleaseForm.version" type="text" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="updateReleaseForm.errors.version" class="mt-2" />
        </div>

        <!-- Date -->
        <div class="col-span-6">
          <jet-label for="released_on" value="Date of release" />
          <jet-input id="released_on" v-model="updateReleaseForm.released_on" type="date" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="updateReleaseForm.errors.released_on" class="mt-2" />
        </div>

        <!-- Release note -->
        <div class="col-span-6">
          <jet-label for="notes" value="Release note" />
          <jet-textarea id="notes" v-model="updateReleaseForm.notes" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="updateReleaseForm.errors.notes" class="mt-2" />
        </div>
      </template>

      <template #footer>
        <jet-secondary-button @click="updatingRelease = null">
          Cancel
        </jet-secondary-button>

        <jet-button class="ml-2" :class="{ 'opacity-25': updateReleaseForm.processing }" :disabled="updateReleaseForm.processing" @click="updateRelease">
          Save
        </jet-button>
      </template>
    </jet-dialog-modal>

    <!-- Delete a Release -->
    <jet-confirmation-modal :show="deletingRelease" @close="deletingRelease = null">
      <template #title>
        Delete Release
      </template>

      <template v-if="deletingRelease" #content>
        Are you sure you want to delete release {{ deletingRelease.version }}?
      </template>

      <template #footer>
        <jet-secondary-button @click="deletingRelease = null">
          Cancel
        </jet-secondary-button>

        <jet-danger-button class="ml-2" :class="{ 'opacity-25': deleteReleaseForm.processing }" :disabled="deleteReleaseForm.processing" @click="deleteRelease">
          Delete
        </jet-danger-button>
      </template>
    </jet-confirmation-modal>
  </div>
</template>

<script>
import JetActionSection from '@/Jetstream/ActionSection';
import JetButton from '@/Jetstream/Button';
import JetConfirmationModal from '@/Jetstream/ConfirmationModal';
import JetDangerButton from '@/Jetstream/DangerButton';
import JetDialogModal from '@/Jetstream/DialogModal';
import JetInput from '@/Jetstream/Input';
import JetTextarea from '@/Jetstream/Textarea';
import JetInputError from '@/Jetstream/InputError';
import JetLabel from '@/Jetstream/Label';
import JetSecondaryButton from '@/Jetstream/SecondaryButton';
import JetSectionBorder from '@/Jetstream/SectionBorder';
import moment from 'moment';

export default {
  components: {
    JetActionSection,
    JetButton,
    JetConfirmationModal,
    JetDangerButton,
    JetDialogModal,
    JetInput,
    JetTextarea,
    JetInputError,
    JetLabel,
    JetSecondaryButton,
    JetSectionBorder,
  },

  props: {
    releases: {
      type: Object,
      default: null,
    },
  },

  data () {

    return {
      createReleaseForm: this.$inertia.form({
        version: '',
        released_on: '',
        notes: '',
      }, {remember: false}),
      updateReleaseForm: this.$inertia.form({
        version: '',
        released_on: '',
        notes: '',
      }, {remember: false}),
      deleteReleaseForm: this.$inertia.form(),
      creatingRelease: null,
      updatingRelease: null,
      deletingRelease: null,
    };

  },

  methods: {
    createRelease () {

      this.createReleaseForm.post(route('releases.store'), {
        preserveScroll: true,
        onSuccess: () => {

          this.creatingRelease = null;
          this.createReleaseForm.reset();

        }
      });

    },

    openUpdateRelease (release) {

      this.updateReleaseForm.version = release.release_number;
      this.updateReleaseForm.released_on = this.formatDate(release.released_on);
      this.updateReleaseForm.notes = release.description;
      this.updatingRelease = release.id;

    },

    updateRelease () {

      this.updateReleaseForm.put(route('releases.update', this.updatingRelease), {
        preserveScroll: true,
        onSuccess: () => {

          this.updatingRelease = null;
          this.updateReleaseForm.reset();

        }
      });

    },

    openDeleteRelease (release) {

      this.deletingRelease = release;

    },

    deleteRelease () {

      this.deleteReleaseForm.delete(route('releases.destroy', this.deletingRelease.id), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {

          this.deletingRelease = null;

        }
      });

    },

    formatDate(value) {
      return value !== undefined ? moment(value).format('YYYY-MM-DD') : '';
    },
  },
};
</script>
