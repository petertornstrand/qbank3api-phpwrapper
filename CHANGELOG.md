# Changelog
All notable changes to this project will be documented in this file.

The format of this changelog adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).
## [Unreleased]
### Added
- This changelog

## [2.0]
### Changed
- Updated the dependency Guzzle from version 5 to 6 to remain actual and provide the highest chance of compability with other projects.
- Returned return statements for all "void" functions due to compability issues. As it turns out, all functions documented as returning void in the API, aren't return void. 

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
