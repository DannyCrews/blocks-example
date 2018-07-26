/**
 * Block dependencies
 */
import icon from './icon';
import './style.scss';
import './editor.scss';

/**
 * Internal block libraries
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

/**
 * Register block
 */
export default registerBlockType(
    'exampleplugin/cta',
    {
        title: __( 'Call to Action', 'exampleplugin' ),
        description: __( 'Demonstration of how to make a static call to action block.', 'exampleplugin' ),
        category: 'example-plugin',
        icon: {
          background: 'rgba(254, 243, 224, 0.52)',
          src: icon,
        },
        keywords: [
            __( 'Banner', 'exampleplugin' ),
            __( 'CTA', 'exampleplugin' ),
            __( 'Shout Out', 'exampleplugin' ),
        ],
        edit: props => {
          const { className, isSelected } = props;
          return (
            <div className={ className }>
              <h2>{ __( 'Static Call to Action', 'exampleplugin' ) }</h2>
              <p>{ __( 'This is really important!', 'exampleplugin' ) }</p>
              {
                isSelected && (
                  <p className="sorry warning">{ __( '✋ Sorry! You cannot edit this block ✋', 'exampleplugin' ) }</p>
                )
              }
            </div>
          );
        },
        save: props => {
          return (
            <div>
              <h2>{ __( 'Call to Action', 'exampleplugin' ) }</h2>
              <p>{ __( 'This is really important!', 'exampleplugin' ) }</p>
            </div>
          );
        },
    },
);
