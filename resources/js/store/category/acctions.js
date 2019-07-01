import Axios from "axios";

export default {
    createData(context, data) {
        Axios({
            method: 'POST',
            url: 'api/addcategory',
            data: data
        })
        .then(res => {
            context.commit('storeparent/category/PUSH_LIST_CATEGORY', res.data);
            return res;

        })
        .catch(err  => {

        })
    },
}
