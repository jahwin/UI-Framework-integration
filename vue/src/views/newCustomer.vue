<template>
    <div class="page-wrapper">
        <h1>This new customer page</h1>
        <br>
        <section>
            <b-field label="Name">
                <b-input></b-input>
            </b-field>

            <b-field label="Email" type="is-danger" message="This email is invalid">
                <b-input type="email" value="john@" maxlength="30">
                </b-input>
            </b-field>

            <b-field label="Username" type="is-success" message="This username is available">
                <b-input value="johnsilver" maxlength="30"></b-input>
            </b-field>

            <b-field label="Password">
                <b-input type="password" value="iwantmytreasure" password-reveal>
                </b-input>
            </b-field>

            <b-field label="Message">
                <b-input maxlength="200" type="textarea"></b-input>
            </b-field>
        </section>
    </div>
</template>
  
<script>
// @ is an alias to /src
export default {
    name: 'new-customer-page',
    components: {
    }
}
</script>
  
<style lang="scss" scoped>
.page-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
</style>