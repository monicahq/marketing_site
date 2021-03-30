<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Posts
      </h2>
    </template>

    <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <posts-index :posts="posts" :categories="categories" :default-category="defaultCategory" />
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout';
import PostsIndex from '@/Components/PostsIndex';

export default {

  components: {
    AppLayout,
    PostsIndex,
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
};
</script>
