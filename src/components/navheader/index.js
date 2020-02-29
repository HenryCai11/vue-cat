import NavHeader from './src/NavHeader.vue';

NavHeader.install = Vue => {
  Vue.components(NavHeader.name, NavHeader);
}

const install = Vue => {
  Vue.use(NavHeader);
}

if (typeof window !== undefined && window.Vue) {
  install(window.Vue);
}

export default NavHeader;