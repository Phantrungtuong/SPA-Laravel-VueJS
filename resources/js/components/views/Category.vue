<template>
    <div>
        <h1>List Category</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
            </tr>
            <tr v-for="categ in cate"
                v-bind:key="categ.id"
                v-bind:category="categ">
                <td>{{categ.id}}</td>
                <td>{{categ.name}}</td>
                <td>{{categ.description}}</td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    data(){
        return {
            cate: []
        }
    },
    name: "Category",
    mounted(){
        axios({
            method: 'GET',
            url: 'api/category',
            data: null
        })
        .then(res => {
            this.cate = res.data;
        })
        .catch(err => {
            console.log(err);
        });
    }
}
</script>
