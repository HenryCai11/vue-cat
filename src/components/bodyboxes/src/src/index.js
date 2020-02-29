import MtBox from './MtBox.vue';
import TmTables from './TmTables.vue';
import TranslationBox from './TranslationBox';

MtBox.install = Vue => {
  Vue.components(MtBox.name, MtBox);
}

TmTables.install = Vue => {
  Vue.components(TmTables.name, TmTables);
}

TranslationBox.install = Vue => {
  Vue.components(TranslationBox.name, TranslationBox);
}

const install = Vue => {
  Vue.use(MtBox);
  Vue.use(TmTables);
  Vue.use(TranslationBox);
}

if (typeof window !== undefined && window.Vue) {
  install(window.Vue);
}
