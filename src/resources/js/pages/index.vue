<template>
  <component
    v-if="globalComponentList[defaultComponent]"
    v-bind:is="globalComponentList[defaultComponent]"
  ></component>
  <component v-else v-bind:is="defaultComponent"></component>
</template>

<script>
import LinkyThemeConfigurationBrowse from "./configuration/browse";

export default {
  components: {
    LinkyThemeConfigurationBrowse,
  },
  name: "LinkyEntryIndex",
  data: () => ({
    globalComponentList: {},
    defaultComponent: null,
  }),
  mounted() {
    const routeName = this.$route.name;
    const componentName = this.$caseConvert.kebab(routeName);
    const slug = this.$route.params ? this.$route.params.slug : "";

    this.globalComponentList = this.constructor.superOptions.components;

    this.defaultComponent = componentName;
  },
  methods: {},
};
</script>
