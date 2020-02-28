import NavHeader from './src/NavHeader.vue';
import NavMenu from './src/src';
import NavUpload from './src/src';
import NavLogin from './src/src';

const install = Vue => {
  Vue.use(NavMenu);
  Vue.use(NavUpload);
  Vue.use(NavLogin);
  Vue.use(NavHeader);
}

NavHeader.install = Vue => {
  Vue.components(NavHeader.name, NavHeader);
}

if (typeof window !== 'undefined' && window.Vue) {
  install(window.Vue);
}

export default {
  NavHeader,
};