<template>
    <div class="d-flex flex-row align-items-center justify-content-center w-100" style="height: 100vh; background-color: lightgray;">
        <form class="p-3 w-100 bg-white rounded-1" style="max-width: 350px;">
            <h1 class="h6 text-center m-3">Login</h1>
            <label for="email" class="d-block p-1">
                <input type="email" id="email" v-model="email" placeholder="Email" class="form-control" autocomplete="username" autofocus/>
            </label>
            <label for="password" class="d-block p-1 mb-3">
                <input type="password" id="password" v-model="password" placeholder="Password" class="form-control" autocomplete="current-password"/>
            </label>
            <div class="p-1">
                <button class="btn btn-dark d-block w-100" type="button" @click="login">Login</button>
            </div>
        </form>
    </div>
</template>

<script src="./LoginView.js"></script>