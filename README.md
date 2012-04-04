# How to install

### Step 1: Configure the Autoloader
Add a new namespace to your autoload

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    // ...
    'Ailove' => __DIR__.'/../vendor/bundles',
));
```
### Step 2: Enable the bundle
Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Ailove\FormTypesBundle\FormTypesBundle(),
    );
}
```

### Step 4: Import twig fields template to your config.yml

``` yml
twig:
    form:
        resources:
            - 'AiloveFormTypesBundle:Form:fields.html.twig'
```

### Step 4: How to use form types

#### Datepicker

AdminClass:

``` php
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ...
            ->add('startDate', 'sonata_type_datepicker', array('locale' => 'ru') )
            ...
        ;
    }
```

option locale represents localization value of jquery datpicker.
