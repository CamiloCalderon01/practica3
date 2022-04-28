<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <router-link exact-active-class="active" to="/" class="nav-link m-auto px-3" aria-current="page">
                <img src="https://freepikpsd.com/file/2019/10/patricio-estrella-png.png" alt="Patricio Estrella" width="35" height="50">
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <router-link exact-active-class="active" to="/" class="nav-link" aria-current="page">Home</router-link>
                </li>
                <li class="nav-item">
                    <router-link exact-active-class="active" to="/agents" class="nav-link">Agent</router-link>
                </li>
                <li class="nav-item">
                    <router-link exact-active-class="active" to="/customers" class="nav-link">Customer</router-link>
                </li>
                <li class="nav-item">
                    <router-link exact-active-class="active" to="/orders" class="nav-link">Orders</router-link>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div>
        <router-view></router-view>
    </div>
</template>