# CU Boulder Styled Block

All notable changes to this project will be documented in this file.

Repo : [GitHub Repository](https://github.com/CuBoulder/ucb_styled_block)

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

- ### Fixes some icons not appearing properly (v1.0.1)
  [bug] An issue existed with an improperly-terminated regular expression such that an icon class starting with a reserved Font Awesome class (for example, `fa-link` starting with `fa-li`) would be incorrectly dropped. This update resolves the issue. Resolves CuBoulder/ucb_styled_block#1
  
  [change] This update also adds `CHANGELOG.md` and GitHub workflows.
---
