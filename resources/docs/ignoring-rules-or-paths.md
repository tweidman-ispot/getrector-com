Do you want to skip whole directory or just single rule? Use `skip()` method:

```php
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->skip([
        __DIR__ . '/src/SingleFile.php',
        __DIR__ . '/src/WholeDirectory',

        // or use fnmatch
        __DIR__ . '/src/*/Tests/*',
    ]);
};
```

Do you want to skip Rector rule?

```php
use Rector\CodeQuality\Rector\If_\SimplifyIfReturnBoolRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->skip([
        SimplifyIfReturnBoolRector::class,
    ]);
};
```

Do you want to skip specific rule only in a specific file?

```php
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->skip([
        SimplifyIfReturnBoolRector::class => [
            __DIR__ . '/src/ComplicatedFile.php',
        ],
    ]);
};
```
