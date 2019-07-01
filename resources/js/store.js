import category from './store/category/store';


import actions from './store/acctions';
import getters from './store/getters';
import mutations from './store/mutations';
import state from './store/state';

export default {
    namespaced: true,
    modules: {
        category,
    },
    actions,
    getters,
    mutations,
    state
}
