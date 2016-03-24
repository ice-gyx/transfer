# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 2.1.0 - 2016-02-18

### Added

- [#20](https://github.com/zendframework/zend-hydrator/pull/20) imports the
  documentation from zend-stdlib, publishes it to
  https://zendframework.github.io/zend-hydrator/, and automates building and
  publishing the documentation.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#6](https://github.com/zendframework/zend-hydrator/pull/6) add additional
  unit test coverage
- [#17](https://github.com/zendframework/zend-hydrator/pull/17) and
  [#23](https://github.com/zendframework/zend-hydrator/pull/23) update the code
  to be forwards compatible with zend-servicemanager v3, and to depend on
  zend-stdlib and zend-eventmanager v3.

## 2.0.0 - 2015-09-17

### Added

- The following classes were marked `final` (per their original implementation
  in zend-stdlib):
  - `Zend\Hydrator\NamingStrategy\IdentityNamingStrategy`
  - `Zend\Hydrator\NamingStrategy\ArrayMapNamingStrategy`
  - `Zend\Hydrator\NamingStrategy\CompositeNamingStrategy`
  - `Zend\Hydrator\Strategy\ExplodeStrategy`
  - `Zend\Hydrator\Strategy\StrategyChain`
  - `Zend\Hydrator\Strategy\DateTimeFormatterStrategy`
  - `Zend\Hydrator\Strategy\BooleanStrategy`

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 1.0.0 - 2015-09-17

Initial release. This ports all hydrator classes and functionality from
[zend-stdlib](https://github.com/zendframework/zend-stdlib) to a standalone
repository. All final keywords are removed, to allow a deprecation cycle in the
zend-stdlib component.

Please note: the following classes will be marked as `final` for a version 2.0.0
release to immediately follow 1.0.0:

- `Zend\Hydrator\NamingStrategy\IdentityNamingStrategy`
- `Zend\Hydrator\NamingStrategy\ArrayMapNamingStrategy`
- `Zend\Hydrator\NamingStrategy\CompositeNamingStrategy`
- `Zend\Hydrator\Strategy\ExplodeStrategy`
- `Zend\Hydrator\Strategy\StrategyChain`
- `Zend\Hydrator\Strategy\DateTimeFormatterStrategy`
- `Zend\Hydrator\Strategy\BooleanStrategy`

As such, you should not extend them.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.
