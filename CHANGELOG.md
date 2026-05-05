# Changelog

All notable changes to `filament-release-notes` will be documented in this file.

## v5.0.0 - 2026-05-05

### Changed

- Added support for Laravel 13 and Filament 5

## v4.0.1 - 2026-05-05

### Fixed

- Removed duplicate Alpine Persist registration to prevent Livewire 3 / Filament 4 pages from throwing `$persist` redefinition errors
- Restored package test bootstrap by autoloading the package test namespace for Pest

### Changed

- Updated the package development test stack to Laravel 12-compatible Pest and Testbench versions
- Refreshed locked development dependencies for the package build and test environment

## v4.0.0 - 2025-10-03

### Added

- Filament v4 compatibility
- TailwindCSS v4 support with new CSS architecture using `@import "tailwindcss"`
- Improved widget styling with proper Filament v4 component structure

### Changed

- **BREAKING**: Updated minimum Filament version to ^4.0
- **BREAKING**: Migrated from Filament Forms to Schemas API
- **BREAKING**: Updated protected properties from `static` to instance properties where required by Filament v4
- Updated TailwindCSS configuration to v4 syntax with `@theme` and `@source` directives
- Improved CSS isolation with `--important` selector and disabled preflight
- Updated widget template structure for better Filament v4 compatibility

### Technical Changes

- Migrated from `Form $form` to `Schema $schema` in resource forms
- Updated widget view properties from `protected static string` to `protected string`
- Updated page view properties from `protected static string` to `protected string`
- Added proper action imports (BulkActionGroup, DeleteAction, DeleteBulkAction)
- Updated navigation icon property type to support backed enums

## v0.1.3 - 2025-05-09

- Allow contracts v12 for Laravel 12 compatibility

## v0.1.2 - 2024-09-19

- Fix bug when caching with release notes enabled

## v0.1.1 - 2024-08-09

- Fix bug when no release notes are found in the database

## v0.1.0 - 2024-07-25

- Initial Release
