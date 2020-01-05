<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## API

{dominio}/api/rota90

## Body [JSON]
```
{
	"input":[[1,2],[3,4]]
}
```

```
{
	"input":[[1,2,3],[4,5,6],[7,8,9]]
}
```

## Resultados

*Satisfactorio*
```
{
    "res": true,
    "output": [
        [
            2,
            4
        ],
        [
            1,
            3
        ]
    ]
}
```
*error*
```
{
    "res": false,
    "msg": ""
}
```