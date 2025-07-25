<?php
/**
 * WP editor field view.
 *
 * @since 2.0.0
 */
defined( 'ABSPATH' ) || exit;

?>
<li class="<?php echo esc_attr(trim($field->wrapper_classes)); ?>" <?php echo $field->get_wrapper_html_attributes(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>

	<div class="wu-block wu-w-full">

		<label for="<?php echo esc_attr($field->id); ?>">

			<?php

			/**
			 * Adds the partial title template.
			 *
			 * @since 2.0.0
			 */
			wu_get_template(
				'admin-pages/fields/partials/field-title',
				[
					'field' => $field,
				]
			);

			?>

		</label>

		<div class="wu-my-1">

			<wp-editor 
				name="<?php echo esc_attr($field->id); ?>"
				id="<?php echo esc_attr($field->id); ?>"
				value="<?php echo esc_html($field->value); ?>"
				<?php echo $field->get_html_attributes(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			/>

		</div>

		<div>

			<?php

			/**
			 * Adds the partial title template.
			 *
			 * @since 2.0.0
			 */
			wu_get_template(
				'admin-pages/fields/partials/field-description',
				[
					'field' => $field,
				]
			);

			?>

		</div>

	</div>

</li>
