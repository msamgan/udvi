# Udvi for Laravel Uuids

## Installation

You can install this plugin into your laravel application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require msamgan/udvi
```

To use this package add **HasUuid** Trait in the  Model.

```
Use HasUuid;
```


## Assumptions

It is assumed  that the Column name in your table is **'uuid'**. As the default is set to use uuid as the column name. Though you can change it to any column by adding the following function to your model.

```
    /**
     * @return string
     */
    public function getUuidKey()
    {
        /**
         * column name goes here.
         */
        return 'uuid';
    }
```
