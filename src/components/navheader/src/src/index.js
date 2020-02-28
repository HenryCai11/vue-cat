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

export default {
  NavMenu,
  NavUpload,
  NavLogin
}