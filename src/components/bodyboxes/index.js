import BodyBoxes from './src/BodyBoxes.vue';

BodyBoxes.install = Vue => {
  Vue.components(BodyBoxes.name, BodyBoxes);
}

const install = Vue => {
  Vue.use(BodyBoxes);
}

if (typeof window !== undefined && window.Vue) {
  install(window.Vue);
}

export default BodyBoxes;