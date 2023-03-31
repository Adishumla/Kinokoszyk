(() => {
    const el = window.wp.element.createElement;
    const { registerBlockType } = window.wp.blocks;
    const { RichText } = window.wp.blockEditor;

    registerBlockType('my/hero', {
        title: 'Hero',
        icon: 'universal-access-alt',
        category: 'layout',
        attributes: {
            title: {
                type: 'array',
                source: 'children',
                selector: '.text-wine',
            },
            subtitle: {
                type: 'array',
                source: 'children',
                selector: '.font-prata',
            },
            paragraph: {
                type: 'array',
                source: 'children',
                selector: '.text-xl',
            },
        },
        edit: myEdit,
        save: mySave
    });

    // what's rendered in admin
    function myEdit(props) {
        const atts = props.attributes;

        return el(
            'section',
            { className: 'w-full h-2/3 flex flex-col justify-center items-center bg-white-red poppins text-off-black' },
            el(
                'div',
                { className: 'ml-28 p-[108px]' },
                el(RichText, {
                    tagName: 'h1',
                    className: 'text-3xl font-light text-wine',
                    value: atts.title,
                    onChange: (value) => {
                        props.setAttributes({ title: value });
                    },
                }),
                el(RichText, {
                    tagName: 'h2',
                    className: 'text-9xl font-prata',
                    value: atts.subtitle,
                    onChange: (value) => {
                        props.setAttributes({ subtitle: value });
                    },
                }),
                el(
                    'div',
                    { className: 'w-1/2 mt-4' },
                    el(RichText, {
                        tagName: 'p',
                        className: 'text-xl w-full',
                        value: atts.paragraph,
                        onChange: (value) => {
                            props.setAttributes({ paragraph: value });
                        },
                    }),
                ),
            ),
        );
    }


    // what's saved in database and rendered in frontend
    function mySave(props) {
        const atts = props.attributes;

        return el(
            'section',
            { className: 'w-full h-2/3 flex flex-col justify-start items-center bg-white-red poppins text-off-black' },
            el(
                'div',
                { className: 'ml-28 py-[108px] justify-self-start' },
                el(RichText.Content, {
                    tagName: 'h1',
                    className: 'text-3xl font-light text-wine',
                    value: atts.title,
                }),
                el(RichText.Content, {
                    tagName: 'h2',
                    className: 'text-9xl font-prata',
                    value: atts.subtitle,
                }),
                el(
                    'div',
                    { className: 'w-2/3 mt-4 max-w-[800px]' },
                    el(RichText.Content, {
                        tagName: 'p',
                        className: 'text-xl w-full',
                        value: atts.paragraph,
                    }),
                ),
            ),
        );
    }
})();
