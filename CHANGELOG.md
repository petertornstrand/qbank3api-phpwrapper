# Changelog
All notable changes to this project will be documented in this file.

The format of this changelog adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).
## [Unreleased]
### Added
- This changelog

## [1.4.0]
### Added
- Option to retrieve child medias when retrieving a media

<pre> 
	// v1.3.4
	$media = $this->qbankApi->media()->retrieveMedia($parameters['mediaId'], $cachePolicy);

	// v1.4.0
	$media = $this->qbankApi->media()->retrieveMedia($parameters['mediaId'], true, $cachePolicy);
</pre>

- Include child medias in each media when searching

<pre>
	$ms = new Search();
	$ms->setIncludeChildren(true);
</pre>

### Changed
- Updated the QBank3 API-wrapper from `v1.3.*` to `v1.4.*`

### Removed
- Return statements for void functions
