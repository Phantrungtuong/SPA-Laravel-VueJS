<template>
    <div>
        <h4>Create Category</h4>
        <input
            type="text"
            name="name"
            class="form-control"
            placeholder="name"
            v-model="category.name">
        <br>
        <input
            type="text"
            name="description"
            class="form-control"
            placeholder="Description"
            v-model="category.description">
        <br>
        <button type="submit" class="btn btn-primary" v-on:click="addCategory"> New Category</button>
    </div>
</template>
<script>
export default {
    name: "category.create",
    data(){
        return{
            category: {
                name: "",
                description: ""
            }
        }
    },
    mounted(){
    },

    methods: {
        addCategory(){
            this.$store.dispatch("storeparent/category/createData", this.category)
        }
    }
}
</script>
