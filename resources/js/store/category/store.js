import actions from './acctions';
import getters from './getters';
import mutations from './mutations';
export default {
    namespaced: true,
    state() {
        return {
            categories: []
        }
    },

    mutations,
    getters,
    actions,

}
