import Vuex from 'vuex'
import Vue from "vue";

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        counter: 10
    },
    mutations: {
        increment (state) {
            state.counter++
        }
    }
});
