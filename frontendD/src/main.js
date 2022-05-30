import { createApp } from 'vue'
import App from './App.vue'

import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
import { dom } from "@fortawesome/fontawesome-svg-core";

import axios from 'axios'
import VueAxios from 'vue-axios'

library.add(fas);
library.add(fab);
library.add(far);
dom.watch();

import router  from './router/urls.js'

const app =  createApp(App)

app.use(router)
app.use(VueAxios, axios)
app.component('font-awesome-icon', FontAwesomeIcon)



app.mount('#app')
