import Pages from "./../pages/index.vue";

let prefix = process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  ? "/" + process.env.MIX_ADMIN_PANEL_ROUTE_PREFIX
  : "/badaso-dashboard";

export default [
  {
    path: prefix + "/linky-theme-configuration",
    name: "LinkyThemeConfigurationBrowse",
    component: Pages,
    meta: {
      title: "Linky Theme Configuration",
      useComponent: "AdminContainer"
    },
  },
];
