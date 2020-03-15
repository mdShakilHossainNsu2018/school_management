<template>
    <div class="container">
        <div>
            <full-page ref="fullpage" :options="options" id="fullpage">
                <div class="section">
                   {{count}}
                </div>
                <div class="section">
                    Second section ...
                </div>
            </full-page>
        </div>
    </div>
</template>

<script>
    export default {
       computed: {
           count(){
               return this.$store.state.counter;
           }
       }
    }
</script>
