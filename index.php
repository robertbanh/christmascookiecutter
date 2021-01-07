<?
$_meta_desc = "Your one-stop shop for all things related to Christmas Cookie Cutters.";
$_h1 = "Christmas Cookie Cutter";
$_h2 = "Your one-stop shop for all things related to Christmas Cookie Cutters.";

require __DIR__.'/_header.php';
?>
<div id="main">
	<div class="inner">
		<div class="columns">
			<? $products = [
					[
						'image' => 'Plastic-Giant-Tree-Cookie-Cutter-Green---Wondershop.jpg',
						'url'   => 'https://www.target.com/p/plastic-giant-tree-cookie-cutter-green-wondershop-8482/-/A-79773184',
						'alt'   => 'Plastic Giant Tree Cookie Cutter Green - Wondershop',
					],
					[
						'image' => 'Wilton-Traditional-Holiday-Metal-Cookie-Cutter-&-Sprinkle-Set.jpg',
						'url'   => 'https://www.target.com/p/wilton-traditional-holiday-metal-cookie-cutter-38-sprinkle-set/-/A-79812869',
						'alt'   => 'Wilton Traditional Holiday Metal Cookie Cutter & Sprinkle Set',
					],
					[
						'image' => 'Wilton-4pc-Assorted-Grippy-Cookie-Cutter-Set.jpg',
						'url'   => 'https://www.target.com/p/wilton-4pc-assorted-grippy-cookie-cutter-set/-/A-80858644',
						'alt'   => 'Wilton 4pc Assorted Grippy Cookie Cutter Set',
					],
					[
						'image' => 'Stainless-Steel-Cookie-Cutter---Threshold.jpg',
						'url'   => 'https://www.target.com/p/stainless-steel-cookie-cutter-threshold/-/A-81859007',
						'alt'   => 'Stainless Steel Cookie Cutter - Threshold',
					],
					[
						'image' => 'Plastic-Giant-Gingerbread-Person-Cookie-Cutter-Red---Wondershop.jpg',
						'url'   => 'https://www.target.com/p/plastic-giant-gingerbread-person-cookie-cutter-red-wondershop-8482/-/A-79773171',
						'alt'   => 'Plastic Giant Gingerbread Person Cookie Cutter Red - Wondershop',
					],
					[
						'image' => 'ThinkGeek-Inc-Star-Wars-Endor-Cookie-Cutter-2-Pack.jpg',
						'url'   => 'https://www.target.com/p/thinkgeek-inc-star-wars-endor-cookie-cutter-2-pack/-/A-76193862',
						'alt'   => 'ThinkGeek Inc Star Wars Endor Cookie Cutter 2-Pack',
					],
					[
						'image' => 'Wilton-12pc-Holiday-Metal-Cookie-Cutter-Set.jpg',
						'url'   => 'https://www.target.com/p/wilton-12pc-holiday-metal-cookie-cutter-set/-/A-79812864',
						'alt'   => 'Wilton 12pc Holiday Metal Cookie Cutter Set',
					],
					[
						'image' => '3pk-Stainless-Steel-Cookie-Cutter-Set---Wondershop.jpg',
						'url'   => 'https://www.target.com/p/3pk-stainless-steel-cookie-cutter-set-wondershop-8482/-/A-79773178',
						'alt'   => '3pk Stainless Steel Cookie Cutter Set - Wondershop',
					],
					[
						'image' => 'Disney-Frozen-2--Falling-Snowflake-Cast-Cookie-Stamps.jpg',
						'url'   => 'https://www.target.com/p/disney-frozen-2-falling-snowflake-cast-cookie-stamps/-/A-78615042',
						'alt'   => 'Disney Frozen 2- Falling Snowflake Cast Cookie Stamps',
					],
					[
						'image' => 'DEMDACO-Holiday-Cookie-Stamp-Set-Red.jpg',
						'url'   => 'https://www.target.com/p/demdaco-holiday-cookie-stamp-set-red/-/A-81315213',
						'alt'   => 'DEMDACO Holiday Cookie Stamp Set Red',
					],
					[
						'image' => 'Stainless-Steel-Cookie-Cutter---Threshold2.jpg',
						'url'   => 'https://www.target.com/p/stainless-steel-ornament-cookie-cutter-threshold-8482/-/A-79773078',
						'alt'   => 'Stainless Steel Cookie Cutter - Threshold',
					],
					[
						'image' => 'Stainless-Steel-Cookie-Cutter---Threshold---stocking.jpg',
						'url'   => 'https://www.target.com/p/stainless-steel-stocking-cookie-cutter-threshold-8482/-/A-79773079',
						'alt'   => 'Stainless Steel Cookie Cutter - Threshold - stocking',
					],
			];

				foreach ($products as $p): ?>
					<div class="image fit">
						<a href="<?= $p['url'] ?>" target="_blank"><img src="/images/<?= $p['image'] ?>" alt="<?= $p['alt'] ?>"/></a>
					</div>
			<? endforeach ?>
		</div>
	</div>
</div>
<?
	require __DIR__.'/_footer.php';
?>