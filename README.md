<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## API Endpoints

Outlined below is how to run all the necessary endpoints
To begin go to this url:

Then register a user with your chosen credentials or use this test credentials to login: username: "kramerc@example.com" password: "testpassword"

All available queries require authentication and so do the updateCarDetails and carRegister mutations. These means adding the access token received on registration or login to the query as a http header as below:

{
  "Authorization" : "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiZGMwZjk3MjBlZGFhZTVlNGY2YzcxMzIxMzEyYTY0OWMxMzAyZmE4MDJmMDA4YmYyZTM3ZWMyNTIxOTdiMjUxODMxMjAyZjUxOTFhNzgzN2QiLCJpYXQiOjE2NDgwNDA0NjcuODE1MjI0LCJuYmYiOjE2NDgwNDA0NjcuODE1MjQ0LCJleHAiOjE2Nzk1NzY0NjcuNTYxNDU1LCJzdWIiOiIyMSIsInNjb3BlcyI6W119.dyF92U_Qok99px8RyF4xuoMxj58auaBLvKHy2-8oEcua4IkBq7ALKRxuPzmlK88bkojOPBgofF_9vdTC9GQ_Bm4gWw1r_PZGpwKYTPDvVSGhnBeIB3JqUgrurTUAiujRUrEOJgjoYTYZUim362Nr011f533AtiWwLlYdCrHJIzozUh5SK82ukKPKF5NbtYqg-kIqWGDZ3JEaaU48XL6HJslWSjbY0WkKz5QBSCP-ro3QS-77KsviJwc8W7ixsXJCpiTZFZZkiQKksKQGqMuYrxGCmGzUy4uoo-7aWNvoWACnurOmT-InNEHrUE9n2rA20TiggkyeeodLVzO8dZOATqg9sRC-ECbPoAc-pDopnjQyEIovMqEJEZg78Sx_W-FIbdQR1rhI2HSanJW5lxcXQjecl0AvzYoPguDun2ej6YZftdcA_E-rbM3Y8rSIkN4-287NYAkJCaKLlDt2ePlqL8Bpu563DLctRahe3Y5Jl3VqDAj4s-v86i9biYcn4nmgld8IYrscoXgksCDgTK_xtVUksW6tDfjKOBpcjsdOqN300E_KYV6ChZOGyJPWczfbxBjluj2rVEMmLQbxExQY_ANlZpbHm7PNnslDmsZ5Xy4dZhPC0CUSU8JsSgkiH4BbhmKtV3rL5vcXoLxHS3-tR8vDuxHJ3LMRVsRNTd_bSh4"
}

1. Register a user
mutation {
  register(input: {
    name: "Elaine Benes"
    email: "benes21@example.com"
    password: "testpassword2"
    password_confirmation: "testpassword2"
  }) {
    tokens{
      access_token
      refresh_token
      token_type
      expires_in
      user {
        id
        name
      }

    }
    status
  }
}

2. Login
mutation {
  login(input: {
    username: "benes21@example.com"
    password: "testpassword2"
  }) {

    access_token
    refresh_token
    token_type
    expires_in
    user {
      id
      name
    }

  }
}

3. List cars belonging to a specific user:
query {
  user(id:19){
    name
    email
    cars{
      reg_no
      tonnage
      year_of_manufacture
      car_types {
        name
      }
    }
  }
}

4. Update Car Details
mutation {
  updateCarDetails(input: {
    id: 2
    tonnage: 3700
    car_types: {
      car_types_id: 2
    }
    users: {
      user_id: 15
    }

  }){
    id
    reg_no
    updated_at
    year_of_manufacture
    tonnage
    created_at
    car_types{
      id
      name
    }
    users{
      id
      name
    }


  }

}

5. Register a car

mutation {
  carRegister(input:{
    reg_no: "yk9w78h"
    year_of_manufacture: "2020"
    tonnage: 1000
    car_types: {
      car_types_id: 3
    }
    users: {
      user_id: 10
    }
  }){
    created_at
    year_of_manufacture
    tonnage
    id
    users {
      name
      id
      email
    }
    car_types {
      name
    }
  }

}

6. Logout
mutation {
  logout{
    status
    message
  }
}