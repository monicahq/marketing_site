<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Releases
      </h2>
    </template>

    <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <releases-index :releases="releases" />
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout';
import ReleasesIndex from '@/Components/ReleasesIndex';

export default {

  components: {
    AppLayout,
    ReleasesIndex,
  },
  props: ['releases',],
};
</script>
