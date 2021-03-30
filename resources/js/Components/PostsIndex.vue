<template>
  <div>
    <jet-action-section>
      <template #title>
        Create a post
      </template>

      <template #description>
        Create a new post.
      </template>

      <template #content>
        <jet-button @click="creatingPost = true">
          Create a new Post
        </jet-button>
      </template>
    </jet-action-section>

    <div v-if="posts.length > 0">
      <jet-section-border />

      <!-- Manage API Tokens -->
      <div class="mt-10 sm:mt-0">
        <jet-action-section>
          <template #title>
            Posts
          </template>

          <template #description>
            List of posts.
          </template>

          <!-- API Token List -->
          <template #content>
            <div class="space-y-6">
              <div v-for="post in posts" :key="post.id" class="flex items-center justify-between">
                <div>
                  <a :href="route('blog.show', post.slug)" target="_blank">{{ post.title }}</a>
                </div>

                <div class="text-sm text-gray-400">
                  {{ formatDate(post.updated_at) }}
                </div>

                <div class="flex items-center">
                  <button class="cursor-pointer ml-6 text-sm text-gray-400 underline"
                          @click="openUpdatePost(post)"
                  >
                    Update
                  </button>

                  <button class="cursor-pointer ml-6 text-sm text-red-500" @click="openDeletePost(post)">
                    Delete
                  </button>
                </div>
              </div>
            </div>
          </template>
        </jet-action-section>
      </div>
    </div>

    <!-- Post creation Modal -->
    <jet-dialog-modal :show="creatingPost" @close="creatingPost = false">
      <template #title>
        Create a post
      </template>

      <template #content>
        <!-- Title -->
        <div class="col-span-6 sm:col-span-4">
          <jet-label for="title" value="Title" />
          <jet-input id="title" v-model="createPostForm.title" type="text" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="createPostForm.errors.title" class="mt-2" />
        </div>

        <!-- Slug -->
        <div class="col-span-6">
          <jet-label for="slug" value="Slug" />
          <jet-input id="slug" v-model="createPostForm.slug" type="text" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="createPostForm.errors.slug" class="mt-2" />
        </div>

        <!-- Social media description -->
        <div class="col-span-6">
          <jet-label for="social_media_description" value="Social media description" />
          <jet-input id="social_media_description" v-model="createPostForm.social_media_description" type="text" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="createPostForm.errors.social_media_description" class="mt-2" />
        </div>

        <!-- Category -->
        <div class="col-span-6">
          <jet-label for="category_id" value="Category" />
          <jet-select id="category_id" v-model="createPostForm.category_id" :options="categories" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="createPostForm.errors.category_id" class="mt-2" />
        </div>

        <!-- Post note -->
        <div class="col-span-6">
          <jet-label for="post" value="Post note" />
          <jet-textarea id="post" v-model="createPostForm.post_note" rows="20" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="createPostForm.errors.post_note" class="mt-2" />
        </div>
      </template>

      <template #footer>
        <jet-secondary-button @click="creatingPost = null">
          Cancel
        </jet-secondary-button>

        <jet-button class="ml-2" :class="{ 'opacity-25': createPostForm.processing }" :disabled="createPostForm.processing" @click="createPost">
          Save
        </jet-button>
      </template>
    </jet-dialog-modal>

    <!-- Post update Modal -->
    <jet-dialog-modal :show="updatingPost" @close="updatingPost = false">
      <template #title>
        Update a post
      </template>

      <template #content>
        <!-- Title -->
        <div class="col-span-6 sm:col-span-4">
          <jet-label for="title" value="Title" />
          <jet-input id="title" v-model="updatePostForm.title" type="text" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="updatePostForm.errors.title" class="mt-2" />
        </div>

        <!-- Slug -->
        <div class="col-span-6">
          <jet-label for="slug" value="Slug" />
          <jet-input id="slug" v-model="updatePostForm.slug" type="text" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="updatePostForm.errors.slug" class="mt-2" />
        </div>

        <!-- Social media description -->
        <div class="col-span-6">
          <jet-label for="social_media_description" value="Social media description" />
          <jet-input id="social_media_description" v-model="updatePostForm.social_media_description" type="text" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="updatePostForm.errors.social_media_description" class="mt-2" />
        </div>

        <!-- Category -->
        <div class="col-span-6">
          <jet-label for="category_id" value="Category" />
          <jet-select id="category_id" v-model="updatePostForm.category_id" :options="categories" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="updatePostForm.errors.category_id" class="mt-2" />
        </div>

        <!-- Post note -->
        <div class="col-span-6">
          <jet-label for="post" value="Post note" />
          <jet-textarea id="post" v-model="updatePostForm.post_note" rows="20" class="mt-1 block w-full" autofocus />
          <jet-input-error :message="updatePostForm.errors.post_note" class="mt-2" />
        </div>
      </template>

      <template #footer>
        <jet-secondary-button @click="updatingPost = null">
          Cancel
        </jet-secondary-button>

        <jet-button class="ml-2" :class="{ 'opacity-25': updatePostForm.processing }" :disabled="updatePostForm.processing" @click="updatePost">
          Save
        </jet-button>
      </template>
    </jet-dialog-modal>

    <!-- Delete a post -->
    <jet-confirmation-modal :show="deletingPost" @close="deletingPost = null">
      <template #title>
        Delete post
      </template>

      <template v-if="deletingPost" #content>
        Are you sure you want to delete post {{ deletingPost.title }}?
      </template>

      <template #footer>
        <jet-secondary-button @click="deletingPost = null">
          Cancel
        </jet-secondary-button>

        <jet-danger-button class="ml-2" :class="{ 'opacity-25': deletePostForm.processing }" :disabled="deletePostForm.processing" @click="deletePost">
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
import JetSelect from '@/Jetstream/Select';
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
    JetSelect,
    JetTextarea,
    JetInputError,
    JetLabel,
    JetSecondaryButton,
    JetSectionBorder,
  },

  props: {
    posts: {
      type: Object,
      default: null,
    },
    categories: {
      type: [Array, Object],
      default: () => [],
    },
    defaultCategory: {
      type: Number,
      default: 0
    },
  },

  data () {

    return {
      createPostForm: this.$inertia.form({
        title: '',
        slug: '',
        post_note: '',
        category_id: this.defaultCategory,
        social_media_description: '',
      }, {remember: false}),

      updatePostForm: this.$inertia.form({
        title: '',
        slug: '',
        post_note: '',
        category_id: null,
        social_media_description: '',
      }, {remember: false}),

      deletePostForm: this.$inertia.form(),
      creatingPost: null,
      updatingPost: null,
      deletingPost: null,
    };

  },

  methods: {
    createPost () {

      this.createPostForm.post(route('posts.store'), {
        preserveScroll: true,
        onSuccess: () => {

          this.creatingPost = null;
          this.createPostForm.reset();

        }
      });

    },

    openUpdatePost (post) {

      this.updatePostForm.title = post.title;
      this.updatePostForm.slug = post.slug;
      this.updatePostForm.post_note = post.post;
      this.updatePostForm.category_id = post.category_id;
      this.updatePostForm.social_media_description = post.social_media_description;
      this.updatingPost = post.id;

    },

    updatePost () {

      this.updatePostForm.put(route('posts.update', this.updatingPost), {
        preserveScroll: true,
        onSuccess: () => {

          this.updatingPost = null;
          this.updatePostForm.reset();

        }
      });

    },

    openDeletePost (post) {

      this.deletingPost = post;

    },

    deletePost () {

      this.deletePostForm.delete(route('posts.destroy', this.deletingPost.id), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {

          this.deletingPost = null;

        }
      });

    },

    formatDate(value) {
      return moment(value).format('YYYY-MM-DD')
    },
  },
};
</script>
