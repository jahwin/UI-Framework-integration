<template>
  <div class="page-wrapper">
    <h1>This new login page</h1>

    <br>
    <section>


      <b-field label="Email" :type="!isValidated ? 'is-danger' : 'is-success'"
        :message="!isValidated ? 'This email is invalid' : ''">
        <b-input type="email" value="john@" maxlength="30">
        </b-input>
      </b-field>


      <b-field label="Password">
        <b-input type="password" value="iwantmytreasure" password-reveal>
        </b-input>
      </b-field>

      <b-button type="is-primary" :loading="isLoading" @click="isValidated = !isValidated"
        icon-left="github-circle">Submit</b-button>


    </section>

    <button class="btn btn-success" :loading="isLoading">Click me</button>
  </div>
</template>

<script>
// @ is an alias to /src
export default {
  name: 'login-page',
  components: {
  },
  data() {
    return {
      name: 'John Silver',
      isValidated: true,
      isLoading: true
    }
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
