import {createStore} from "vuex"
import Contact from "@/store/modules/Contact.js";
import createPersistedState from 'vuex-persistedstate';

const store = createStore({
    plugins: [
        createPersistedState({paths: ['Contact']})
    ],
    modules: {
        Contact
    }
})

export default store;
