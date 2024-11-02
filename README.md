# UUID Version 4 Generator
## Install
run this command

```composer require IsabellaB622/uuid```

## Usage
to generate a [Version 4 UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Version_4_(random))
```
<?php
	require_once 'vendor/autoload.php';
	use IsabellaB622\uuid;
	echo uuid::generate_v4();
?>
```
## License
This project is licensed under the MIT license
