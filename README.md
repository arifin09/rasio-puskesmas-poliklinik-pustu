# rasio-puskesmas-poliklinik-pustu
Rasio Puskesmas, Poliklinik dan Pustu per 100.000 Penduduk (RPP)

[![Join the chat at https://gitter.im/rasio-puskesmas-poliklinik-pustu/Lobby](https://badges.gitter.im/rasio-puskesmas-poliklinik-pustu/Lobby.svg)](https://gitter.im/rasio-puskesmas-poliklinik-pustu/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/rasio-puskesmas-poliklinik-pustu/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-puskesmas-poliklinik-pustu/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/rasio-puskesmas-poliklinik-pustu/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-puskesmas-poliklinik-pustu/build-status/master)


## install via composer

- Development snapshot
```bash
$ composer require bantenprov/rasio-puskesmas-poliklinik-pustu:dev-master
```
- Latest release:

## download via github
```bash
$ git clone https://github.com/bantenprov/rasio-puskesmas-poliklinik-pustu.git
```
#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\RasioPusPoltu\RasioPusPoltuServiceProvider::class

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=rasio-puspoltu-assets
$ php artisan vendor:publish --tag=rasio-puspoltu-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
    {
        path: '/dashboard',
        components: {
        main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
        title: "Dashboard"
        }
    },
    //== ...
    {
        path: '/dashboard/rasio-puspoltu',
        components: {
            main: resolve => require(['./components/views/bantenprov/rasio-puspoltu/DashboardRasioPusPoltu.vue'], resolve),
            navbar: resolve => require(['./components/Navbar.vue'], resolve),
            sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
            title: "Rasio Puskesmas, Poliklinik dan Pustu"
        }
    }
    //== ...
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
    //== ...
    {
        path: '/admin/dashboard/rasio-puspoltu',
        components: {
            main: resolve => require(['./components/bantenprov/rasio-puspoltu/RasioPusPoltuAdmin.view.vue'], resolve),
            navbar: resolve => require(['./components/Navbar.vue'], resolve),
            sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
        },
        meta: {
            title: "Rasio Puskesmas, Poliklinik dan Pustu"
        }
    }
    //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Rasio Puskesmas, Poliklinik dan Pustu',
          link: '/dashboard/rasio-puspoltu',
          icon: 'fa fa-angle-double-right'
        },
  ]
},
{
  name: 'Admin',
  icon: 'fa fa-lock',
  childType: 'collapse',
  childItem: [
    {
      name: 'Dashboard',
      icon: 'fa fa-angle-double-right',
      child: [
        {
          name: 'Home',
          link: '/admin/dashboard/home',
          icon: 'fa fa-angle-right'
        },
        //== ...
        {
          name: 'Rasio Puskesmas, Poliklinik dan Pustu',
          link: 'admin/dashboard/rasio-puspoltu',
          icon: 'fa fa-angle-double-right'
        }
      ]
    },
  ]
}
```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

//== Rasio Puspoltu
import RasioPusPoltu from './components/bantenprov/rasio-puspoltu/RasioPusPoltu.chart.vue';
Vue.component('echarts-rasio-puspoltu', RasioPusPoltu);

import RasioPusPoltuKota from './components/bantenprov/rasio-puspoltu/RasioPusPoltuKota.chart.vue';
Vue.component('echarts-rasio-puspoltu-kota', RasioPusPoltuKota);

import RasioPusPoltuTahun from './components/bantenprov/rasio-puspoltu/RasioPusPoltuTahun.chart.vue';
Vue.component('echarts-rasio-puspoltu-tahun', RasioPusPoltuTahun);

import RasioPusPoltuAdminShow from './components/bantenprov/rasio-puspoltu/RasioPusPoltuAdmin.view.vue';
Vue.component('admin-view-rasio-puspoltu-tahun', RasioPusPoltuAdminShow);

import RasioPusPoltuBar01 from './components/views/bantenprov/rasio-puspoltu/RasioPusPoltuBar01.vue';
Vue.component('rasio-puspoltu-bar-01', RasioPusPoltuBar01);

import RasioPusPoltuBar02 from './components/views/bantenprov/rasio-puspoltu/RasioPusPoltuBar02.vue';
Vue.component('rasio-puspoltu-bar-02', RasioPusPoltuBar02);

//== mini bar charts
import RasioPusPoltuBar03 from './components/views/bantenprov/rasio-puspoltu/RasioPusPoltuBar03.vue';
Vue.component('rasio-puspoltu-bar-03', RasioPusPoltuBar03);

import RasioPusPoltuPie01 from './components/views/bantenprov/rasio-puspoltu/RasioPusPoltuPie01.vue';
Vue.component('rasio-puspoltu-pie-01', RasioPusPoltuPie01);

import RasioPusPoltuPie02 from './components/views/bantenprov/rasio-puspoltu/RasioPusPoltuPie02.vue';
Vue.component('rasio-puspoltu-pie-02', RasioPusPoltuPie02);

//== mini pie charts
import RasioPusPoltuPie03 from './components/views/bantenprov/rasio-puspoltu/RasioPusPoltuPie03.vue';
Vue.component('rasio-puspoltu-pie-03', RasioPusPoltuPie03);
```
