import React from 'react';
import { registerBlockType } from '@wordpress/blocks';
import { RichText } from '@wordpress/block-editor';
import { jsx as _jsx } from "react/jsx-runtime";
import { jsxs as _jsxs } from "react/jsx-runtime";
registerBlockType('my/hero-react', {
    title: 'React',
    icon: 'universal-access-alt',
    category: 'layout',
    attributes: {
        title: {
            type: 'array',
            source: 'children',
            selector: '.text-wine'
        },
        subtitle: {
            type: 'array',
            source: 'children',
            selector: '.font-prata'
        },
        paragraph: {
            type: 'array',
            source: 'children',
            selector: '.text-xl'
        }
    },
    edit: MyEdit,
    save: MySave
});
function MyEdit(props) {
    const {
        attributes,
        setAttributes
    } = props;
    const {
        title,
        subtitle,
        paragraph
    } = attributes;
    return /*#__PURE__*/_jsx("section", {
        className: "w-full h-2/3 flex flex-col justify-center items-center bg-white-red poppins text-off-black",
        children: /*#__PURE__*/_jsxs("div", {
            className: "ml-28 p-[108px]",
            children: [/*#__PURE__*/_jsx(RichText, {
                tagName: "h1",
                className: "text-3xl font-light text-wine",
                value: title,
                onChange: value => setAttributes({
                    title: value
                })
            }), /*#__PURE__*/_jsx(RichText, {
                tagName: "h2",
                className: "text-9xl font-prata",
                value: subtitle,
                onChange: value => setAttributes({
                    subtitle: value
                })
            }), /*#__PURE__*/_jsx("div", {
                className: "w-1/2 mt-4",
                children: /*#__PURE__*/_jsx(RichText, {
                    tagName: "p",
                    className: "text-xl w-full",
                    value: paragraph,
                    onChange: value => setAttributes({
                        paragraph: value
                    })
                })
            })]
        })
    });
}
function MySave(props) {
    const {
        attributes
    } = props;
    const {
        title,
        subtitle,
        paragraph
    } = attributes;
    return /*#__PURE__*/_jsx("section", {
        className: "w-full h-2/3 flex flex-col justify-start items-center bg-white-red poppins text-off-black",
        children: /*#__PURE__*/_jsxs("div", {
            className: "ml-28 py-[108px] justify-self-start",
            children: [/*#__PURE__*/_jsx(RichText.Content, {
                tagName: "h1",
                className: "text-3xl font-light text-wine",
                value: title
            }), /*#__PURE__*/_jsx(RichText.Content, {
                tagName: "h2",
                className: "text-9xl font-prata",
                value: subtitle
            }), /*#__PURE__*/_jsx("div", {
                className: "w-2/3 mt-4 max-w-[800px]",
                children: /*#__PURE__*/_jsx(RichText.Content, {
                    tagName: "p",
                    className: "text-xl w-full",
                    value: paragraph
                })
            })]
        })
    });
}