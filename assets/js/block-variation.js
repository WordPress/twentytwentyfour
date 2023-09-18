
const { __ } = wp.i18n;

wp.blocks.registerBlockVariation( 'core/query', {
	name: 'twentytwentyfour/featured-image-query',
	title: __( 'Featured Images' ),
	description: __( 'List of posts with featured images' ),
	attributes: {
		namespace: 'twentytwentyfour/featured-image-query',
		query: {
			perPage: 6,
			postType: 'post',
			order: 'desc',
			orderBy: 'date',
			inherit: false,
			sticky: 'exclude',
			hasFeaturedImage: true,
		},
		align: 'full',
	},
	allowedControls: [ 'order' ],
	innerBlocks: [
		[
			'core/post-template',
			{ layout: {
				type: 'grid',
				columnCount: 3
			} },
			[
				[
					'core/post-featured-image',
					{
						aspectRatio: 2/3,
						isLink: true,
					}
				],
			],
		]
	],
	isActive: [ 'namespace' ],
} );
