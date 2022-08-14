<template>
  <select ref="select" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm dark:shadow-gray-700" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)">
    <template v-if="Array.isArray(options)">
      <option
        v-for="option in filterExclude(options)"
        :key="option.id"
        :value="option.id"
      >
        {{ option.name }}
      </option>
    </template>
    <template v-else>
      <optgroup
        v-for="(optgroup,index) in options"
        :key="index"
        :label="optgroup.name"
      >
        <option
          v-for="option in filterExclude(optgroup.options)"
          :key="option.id"
          :value="option.id"
        >
          {{ option.name }}
        </option>
      </optgroup>
    </template>
  </select>
</template>

<script>
export default {
  props: {
    modelValue: {
      type: [String, Number],
      default: '',
    },
    options: {
      type: [Array, Object],
      default: () => [],
    },
    excludedId: {
      type: [Array, Object],
      default: () => [],
    },
  },

  emits: ['update:modelValue'],

  methods: {
    /**
     * Filter options
     */
    filterExclude: function (options) {
      var me = this;
      return options.filter(function (option) {
        return option.id !== me.excludedId;
      });
    },

    focus() {
      this.$refs.select.focus();
    },
  },
};
</script>

