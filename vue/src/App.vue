<template>
  <div id="app">
    <nav>
      <router-link to="/">Login Page</router-link> |
      <router-link to="/custommers">Customer Page</router-link> |
      <router-link to="/new-customer">New Customer Page</router-link>
    </nav>
    <router-view />
  </div>
</template>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
