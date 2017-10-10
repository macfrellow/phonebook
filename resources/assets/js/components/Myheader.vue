<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="http://bulma.io">
        <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      </a>

      <button class="button navbar-burger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <div class="navbar-menu">
      <div class="navbar-start">
        <!-- navbar items -->
        <router-link to="/home" class="navbar-item">Home</router-link>
        <router-link to="/about" class="navbar-item">About</router-link>

        <!-- <div class="navbar-item has-dropdown is-hoverable">
          <a href="#" class="navbar-link is-active">Docs</a>
          <div class="navbar-dropdown is-boxed">
            <a href="#" class="navbar-item">Overview</a>
            <a href="#" class="navbar-item">Modifiers</a>
            <a href="#" class="navbar-item">Columns</a>
            <a href="#" class="navbar-item">Layout</a>
            <hr class="navbar-divider">
            <div class="navbar-item">
              <div>
                <p class="is-size-6-desktop"><strong class="has-text-info">0.5.3</strong></p>
                <small><a href="#" class="bd-view-all-versions">View all versions</a></small>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar-item has-dropdown is-hoverable">
          <a href="#" class="navbar-link is-active">Blog</a>
          <div class="navbar-dropdown is-boxed">
            <a href="#" class="navbar-item">Home</a>
            <a href="#" class="navbar-item">About</a>
          </div>
        </div> -->
      </div>

      <div class="navbar-end">
        <!-- navbar items -->
      </div>
    </div>
</nav>
</template>
