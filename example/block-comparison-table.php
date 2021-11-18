<?php
/**
 * Block Name: Comparison Table
 *
 * The template for displaying the custom gutenberg block named Comparison Table.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package FMTC
 * @since   1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped( $block['id'] );

// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace( 'acf/', '', $block_glide_name );

// Set the preview thumbnail for this block for gutenberg editor view.
if ( isset( $block['data']['preview_image_help'] ) ) {    /* rendering in inserter preview  */
	echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = ( isset( $block['className'] ) ) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' . $block_glide_name . '-' . $block['id'];

// Making the unique ID for the block.
if ( $block['name'] ) {
	$block_name = $block['name'];
	$block_name = str_replace( '/', '-', $block_name );
	$name       = 'block-' . $block_name;
}

// Block variables
$fmtc_blk_ct_head_row      = ( isset( $block_fields['fmtc_blk_ct_head_row'] ) ) ? $block_fields['fmtc_blk_ct_head_row'] : null;
$fmtc_blk_ct_head_row_yrly = ( isset( $block_fields['fmtc_blk_ct_head_row_yrly'] ) ) ? $block_fields['fmtc_blk_ct_head_row_yrly'] : null;
$add_table                 = ( isset( $block_fields['add_table'] ) ) ? $block_fields['add_table'] : null;
$first_label               = ( isset( $block_fields['first_label'] ) ) ? $block_fields['first_label'] : null;
$second_label              = ( isset( $block_fields['second_label'] ) ) ? $block_fields['second_label'] : null;

?>
<div id="<?php echo $id; ?>"
	class="<?php echo $align_class . ' ' . $class_name . ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
	<div class="table-container-inner">
		<div class="top-table-area table-scroll">
			<table class="main-table with-price">
				<thead>
					<tr>
						<th>
							<div class="tab-pricing-switch">
								<span class="switch-heading plan-heading-first">
									<?php
									if ( $first_label ) {
										echo $first_label;
									}
									?>
								</span>
								<label class="switch">
									<input type="checkbox" id="time-plan" name="time-plan">
									<span class="price-tab round"></span>
								</label>
								<span class="switch-heading plan-heading-second">
									<?php
									if ( $second_label ) {
										echo $second_label;
									}
									?>
								</span>
							</div>
						</th>
						<td>
							<div class="plan-heading">
								<?php
								if ( $fmtc_blk_ct_head_row ) {
									if ( $fmtc_blk_ct_head_row['first_heading'] ) {
										echo $fmtc_blk_ct_head_row['first_heading'];
									}
								}
								?>
							</div>
							<div class="plan-price monthly">
								<?php
								if ( $fmtc_blk_ct_head_row ) {
									if ( $fmtc_blk_ct_head_row['first_amount'] ) {
										echo $fmtc_blk_ct_head_row['first_amount'];
									}
								}
								?>
								/mo</div>
							<div class="yearly" style="display: none">
								<div class="plan-price">
									<?php
									if ( $fmtc_blk_ct_head_row_yrly ) {
										if ( $fmtc_blk_ct_head_row_yrly['first_amount'] ) {
											echo $fmtc_blk_ct_head_row_yrly['first_amount'];
										}
									}
									?>
									/yr</div>
							</div>
							<div class="monthly">
								<div class="plan-button">
									<?php
									if ( $fmtc_blk_ct_head_row['first_button'] ) {
										echo glide_acf_button( $fmtc_blk_ct_head_row['first_button'], 'button large' );
									}
									?>
								</div>
							</div>
							<div class="yearly" style="display: none">
								<div class="plan-button">
									<?php
									if ( $fmtc_blk_ct_head_row_yrly['first_button'] ) {
										echo glide_acf_button( $fmtc_blk_ct_head_row_yrly['first_button'], 'button large' );
									}
									?>
								</div>
							</div>

						</td>
						<td>
							<div class="plan-heading">
								<?php
								if ( $fmtc_blk_ct_head_row['second_heading'] ) {
									echo $fmtc_blk_ct_head_row['second_heading'];
								}
								?>
							</div>

							<div class="monthly">
								<div class="plan-price">
									<?php
									if ( $fmtc_blk_ct_head_row['second_amount'] ) {
										echo $fmtc_blk_ct_head_row['second_amount'];
									}
									?>
									/mo</div>
							</div>
							<div class="yearly" style="display: none">
								<div class="plan-price">
									<?php
									if ( $fmtc_blk_ct_head_row_yrly['second_amount'] ) {
										echo $fmtc_blk_ct_head_row_yrly['second_amount'];
									}
									?>
									/yr</div>
							</div>


							<div class="plan-button">
								<?php
								if ( $fmtc_blk_ct_head_row['second_button'] ) {
									echo glide_acf_button( $fmtc_blk_ct_head_row['second_button'], 'button large' );
								}
								?>
							</div>
						</td>
						<td>
							<div class="plan-heading">
								<?php
								if ( $fmtc_blk_ct_head_row['third_heading'] ) {
									echo $fmtc_blk_ct_head_row['third_heading'];
								}
								?>
							</div>

							<div class="monthly">
								<div class="plan-price">
									<?php
									if ( $fmtc_blk_ct_head_row['third_amount'] ) {
										echo $fmtc_blk_ct_head_row['third_amount'];
									}
									?>
									/<?php _e( 'mo', 'fmtc_td' ); ?></div>
							</div>
							<div class="yearly" style="display: none">
								<div class="plan-price">
									<?php
									if ( $fmtc_blk_ct_head_row_yrly['third_amount'] ) {
										echo $fmtc_blk_ct_head_row_yrly['third_amount'];
									}
									?>
									/<?php _e( 'yr', 'fmtc_td' ); ?>
								</div>
							</div>
							<div class="monthly">
								<div class="plan-button">
									<?php
									if ( $fmtc_blk_ct_head_row['third_button'] ) {
										echo glide_acf_button( $fmtc_blk_ct_head_row['third_button'], 'button large' );
									}
									?>
								</div>
							</div>
							<div class="yearly" style="display: none">
								<div class="plan-button">
									<?php
									if ( $fmtc_blk_ct_head_row_yrly['third_button'] ) {
										echo glide_acf_button( $fmtc_blk_ct_head_row_yrly['third_button'], 'button large' );
									}
									?>
								</div>
							</div>

						</td>
					</tr>

					<tr>
						<?php
						if ( $add_table ) {
							foreach ( $add_table as $table ) {
								$title_header             = ( isset( $table['title_header'] ) ) ? $table['title_header'] : null;
								$fmtc_blk_ct_content_rows = ( isset( $table['fmtc_blk_ct_content_rows'] ) ) ? $table['fmtc_blk_ct_content_rows'] : null;
								if ( $fmtc_blk_ct_content_rows ) {
									foreach ( $fmtc_blk_ct_content_rows as $content_row_data ) {
										$content_row = ( isset( $content_row_data['content_row'] ) ) ? $content_row_data['content_row'] : null;
										if ( $content_row ) {

											?>
					<tr>
						<th>
											<?php
											if ( $content_row['heading'] ) {
												echo $content_row['heading'];
											}
											?>
						</th>
						<td>
											<?php
											if ( $content_row['first_plan'] ) {
												if ( $content_row['first_plan'] == 'text' ) {
																		 echo $content_row['text'];
												} else {
													?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/table-check.svg"
								alt=''>
													<?php
												}
											}
											?>
						</td>
						<td>
											<?php
											if ( $content_row['second_plan'] ) {
												if ( $content_row['second_plan'] == 'text' ) {
													   echo $content_row['text_2'];
												} else {
													?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/table-check.svg"
								alt=''>
													<?php
												}
											}
											?>

						</td>
						<td>
											<?php
											if ( $content_row['third_plan'] ) {
												if ( $content_row['third_plan'] == 'text' ) {
																		 echo $content_row['text_3'];
												} else {
													?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/table-check.svg"
								alt=''>
													<?php
												}
											}
											?>

						</td>
					</tr>

											<?php
										}
									}
								}
								break;
							}
						}

						?>
					</tr>

				</thead>
			</table>
		</div>
		<div class="table-variation-container">
			<h2 class="heading-3">
				<?php
				if ( $add_table ) {
					foreach ( $add_table as $table ) {
						$title_header = ( isset( $table['title_header'] ) ) ? $table['title_header'] : null;
						if ( $title_header ) {
							echo $title_header;
						}
					}
				}
				?>
			</h2>
			<div class="table-variation table-scroll">
				<table class="main-table">
					<thead>
						<?php
						if ( $add_table ) {
							foreach ( $add_table as $table ) {
								$title_header = ( isset( $table['title_header'] ) ) ? $table['title_header'] : null;
								if ( ! empty( $title_header ) ) {
												$fmtc_blk_ct_content_rows = ( isset( $table['fmtc_blk_ct_content_rows'] ) ) ? $table['fmtc_blk_ct_content_rows'] : null;
									if ( $fmtc_blk_ct_content_rows ) {
										foreach ( $fmtc_blk_ct_content_rows as $content_row_data ) {
															$content_row = ( isset( $content_row_data['content_row'] ) ) ? $content_row_data['content_row'] : null;
											if ( $content_row ) {
												?>
						<tr>
							<th>
												<?php
												if ( $content_row['heading'] ) {
														  echo $content_row['heading'];
												}
												?>
							</th>
							<td>
												<?php
												if ( $content_row['first_plan'] ) {
													if ( $content_row['first_plan'] == 'text' ) {
														echo $content_row['text'];
													} else {
														?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/table-check.svg"
									alt=''>
														<?php
													}
												}
												?>
							</td>
							<td>
												<?php
												if ( $content_row['second_plan'] ) {
													if ( $content_row['second_plan'] == 'text' ) {
														echo $content_row['text_2'];
													} else {
														?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/table-check.svg"
									alt=''>
														<?php
													}
												}
												?>

							</td>
							<td>
												<?php
												if ( $content_row['third_plan'] ) {
													if ( $content_row['third_plan'] == 'text' ) {
														echo $content_row['text_3'];
													} else {
														?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/table-check.svg"
									alt=''>
														<?php
													}
												}
												?>
							</td>
						</tr>
												<?php
											}
										}
									}
												  break;
								}
							}
						}
						?>

					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
