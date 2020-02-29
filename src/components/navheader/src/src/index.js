import NavMenu from './NavMenu.vue';
import NavUpload from './NavUpload.vue';
import NavLogin from './NavLogin.vue';

NavMenu.install = Vue => {
  Vue.component(NavMenu.name, NavMenu);
}

NavUpload.install = Vue => {
  Vue.component(NavUpload.name, NavUpload);
}

NavLogin.install = Vue => {
  Vue.component(NavLogin.name, NavLogin);
}

const install = Vue => {
  Vue.use(NavMenu);
  Vue.use(NavUpload);
  Vue.use(NavLogin);
}

if (typeof window !== undefined && window.Vue) {
  install(window.Vue);
}