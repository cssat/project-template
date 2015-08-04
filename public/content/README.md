# Content

The files in this folder power individual visualizations (instances) within this project framework. They have a common structure that can be consumed by both the router in this framework and the Data Portal index website.

## Structure

Content files include both content and configuration information for a visualization instance. They begin with JSON front matter like so:

```
{
	"title": "Visualization title",
	"subtitle": "Visualization subtitle (optional)",
	"slug": "slug (corresponds to filename)",
	"tags": [],
	"config": {
		// Custom configuration options go here
	}
}
```

Everything at the top of the front matter is common to all visualizations in any framework and is essential to listing the instance on the Data Portal website. Everything under "config" is defined for a given project framework and includes whatever variables are needed to power an instance.

Below the JSON front matter, you can write paragraph content for the visualization using standard Markdown. This content will be parsed and outpu at HTML on the page.