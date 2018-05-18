<template>
    <div>
        <form>
            <div class="form-group">
                <label for="bin_name">Name</label>
                <input type="text" class="form-control" id="bin_name" aria-describedby="binHelp" placeholder="Bin Name" v-model="bin.name">
                <small id="emailHelp" class="form-text text-muted">Please give your bin a unique name.</small>
            </div>

            <!--<div class="form-check">-->
                <!--<input type="checkbox" class="form-check-input" id="is_secret" v-model="bin.is_secret">-->
                <!--<label class="form-check-label" for="is_secret">Is Secret Bin?</label>-->
            <!--</div>-->

            <br>
            <button type="submit" class="btn btn-primary" v-on:click="createBin">Create bin</button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                bin: {
                    name: null,
                    userId: null,
                    is_secret: false

                }
            }
        },

        mounted() {

        },

        methods: {
            createBin: function(e) {
                e.preventDefault();
                let self = this;
                axios.post('/api/bins', this.bin)
                    .then(function (response) {
                        window.location = '/bin/' + response.data.data.uuid;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>

<style scoped>

</style>
