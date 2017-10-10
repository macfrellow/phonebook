<template>
  <div>
    <nav class="panel column is-offset-2 is-8">
      <p class="panel-heading">Vuejs Phonebook
        <button class="button is-primary is-outlined" @click="openAdd">Add New</button>
      </p>
      <div class="panel-block">
        <p class="control has-icons-left">
          <input type="text" placeholder="search" class="input is-small">
          <span class="icon is-small is-left">
            <i class="fa fa-search"></i>
          </span>
        </p>
      </div>
      <!-- <p class="panel-tabs">
      <a class="is-active">all</a>
      <a>public</a>
      <a>private</a>
      <a>sources</a>
      <a>forks</a>
      </p>
      <a class="panel-block is-active"><span class="panel-icon"><i class="fa fa-book"></i></span>bulma</a>
      <a class="panel-block"><span class="panel-icon"><i class="fa fa-book"></i></span>marksheet</a>
      <a class="panel-block"><span class="panel-icon"><i class="fa fa-fork"></i></span>mojs</a>
      <label class="panel-block"><input type="checkbox">remember me</label>
      <div class="panel-block"><button class="button is-primary is-outlined is-full-width">reset all filters</button></div> -->
      <a class="panel-block is-active">
        <span class="column is-9">
          bulma
        </span>
        <span class="panel-icon column is-1">
          <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
        </span>
        <span class="panel-icon column is-1">
          <i class="has-text-info fa fa-edit" aria-hidden="true"></i>
        </span>
        <span class="panel-icon column is-1">
          <i class="has-text-primary fa fa-eye" aria-hidden="true"></i>
        </span>
      </a>
    </nav>
    <Add :openmodal='addActive' @closeRequest='close'></Add>
  </div>
</template>

<script>
  let Add = require('./Add.vue');
  export default {
    components: {Add},
    data() {
      return {addActive: ''}
    },
    methods: {
      openAdd() {this.addActive = 'is-active'},
      close() {this.addActive = ''}
    }
  }
</script>
