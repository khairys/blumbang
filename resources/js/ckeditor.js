import {
	ClassicEditor,
	Autosave,
	Essentials,
	Paragraph,
	LinkImage,
	Link,
	ImageBlock,
	ImageToolbar,
	BlockQuote,
	Bold,
	CloudServices,
	ImageUpload,
	ImageInsertViaUrl,
	AutoImage,
	Table,
	TableToolbar,
	Mention,
	Heading,
	ImageTextAlternative,
	ImageCaption,
	ImageStyle,
	Indent,
	IndentBlock,
	ImageInline,
	Italic,
	List,
	MediaEmbed,
	MediaEmbedStyle,
	MediaEmbedToolbar,
	TableCaption,
	TodoList,
	Underline,
	ImageUtils,
	ImageEditing,
	Fullscreen,
	Emoji,
	Autoformat,
	FontBackgroundColor,
	FontColor,
	FontFamily,
	FontSize,
	Highlight,
	HorizontalLine,
	Alignment,
	BalloonToolbar,
	BlockToolbar,
	Base64UploadAdapter
} from 'ckeditor5';

import 'ckeditor5/ckeditor5.css';
import '../css/ckeditor.css';

const LICENSE_KEY = 'GPL'; // or <YOUR_LICENSE_KEY>.

const editorConfig = {
	toolbar: {
		items: [
			'undo',
			'redo',
			'|',
			'fullscreen',
			'|',
			'heading',
			'|',
			'bold',
			'italic',
			'underline',
			'|',
			'bulletedList',
			'numberedList',
			'todoList',
			'outdent',
			'indent',
			'|',
			'insertTable',
			'blockQuote',
			'horizontalLine',
			'|',
			'alignment'
		],
		shouldNotGroupWhenFull: false
	},
	plugins: [
		Alignment,
		Autoformat,
		AutoImage,
		Autosave,
		BalloonToolbar,
		Base64UploadAdapter,
		BlockQuote,
		BlockToolbar,
		Bold,
		CloudServices,
		Emoji,
		Essentials,
		FontBackgroundColor,
		FontColor,
		FontFamily,
		FontSize,
		Fullscreen,
		Heading,
		Highlight,
		HorizontalLine,
		ImageBlock,
		ImageCaption,
		ImageEditing,
		ImageInline,
		ImageInsertViaUrl,
		ImageStyle,
		ImageTextAlternative,
		ImageToolbar,
		ImageUpload,
		ImageUtils,
		Indent,
		IndentBlock,
		Italic,
		Link,
		LinkImage,
		List,
		MediaEmbed,
		MediaEmbedStyle,
		MediaEmbedToolbar,
		Mention,
		Paragraph,
		Table,
		TableCaption,
		TableToolbar,
		TodoList,
		Underline
	],
	licenseKey: LICENSE_KEY,
	autosave: {
		/* See: https://ckeditor.com/docs/ckeditor5/latest/features/autosave.html */
	},
	balloonToolbar: ['bold', 'italic', '|', 'link', '|', 'bulletedList', 'numberedList'],
	blockToolbar: [
		'fontSize',
		'fontColor',
		'fontBackgroundColor',
		'|',
		'bold',
		'italic',
		'|',
		'link',
		'insertTable',
		'|',
		'bulletedList',
		'numberedList',
		'outdent',
		'indent'
	],
	fontFamily: {
		supportAllValues: true
	},
	fontSize: {
		options: [10, 12, 14, 'default', 18, 20, 22],
		supportAllValues: true
	},
	fullscreen: {
		onEnterCallback: container =>
			container.classList.add(
				'editor-container',
				'editor-container_classic-editor',
				'editor-container_include-block-toolbar',
				'editor-container_include-fullscreen',
				'main-container'
			)
	},
	heading: {
		options: [
			{
				model: 'paragraph',
				title: 'Paragraph',
				class: 'ck-heading_paragraph'
			},
			{
				model: 'heading1',
				view: 'h1',
				title: 'Heading 1',
				class: 'ck-heading_heading1'
			},
			{
				model: 'heading2',
				view: 'h2',
				title: 'Heading 2',
				class: 'ck-heading_heading2'
			},
			{
				model: 'heading3',
				view: 'h3',
				title: 'Heading 3',
				class: 'ck-heading_heading3'
			},
			{
				model: 'heading4',
				view: 'h4',
				title: 'Heading 4',
				class: 'ck-heading_heading4'
			},
			{
				model: 'heading5',
				view: 'h5',
				title: 'Heading 5',
				class: 'ck-heading_heading5'
			},
			{
				model: 'heading6',
				view: 'h6',
				title: 'Heading 6',
				class: 'ck-heading_heading6'
			}
		]
	},
	image: {
		toolbar: ['toggleImageCaption', 'imageTextAlternative', '|', 'imageStyle:inline', 'imageStyle:wrapText', 'imageStyle:breakText']
	},
	link: {
		addTargetToExternalLinks: true,
		defaultProtocol: 'https://',
		decorators: {
			toggleDownloadable: {
				mode: 'manual',
				label: 'Downloadable',
				attributes: {
					download: 'file'
				}
			}
		}
	},
	mediaEmbed: {
		toolbar: ['mediaEmbed:breakText', 'mediaEmbed:wrapText']
	},
	mention: {
		feeds: [
			{
				marker: '@',
				feed: [
					/* See: https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html */
				]
			}
		]
	},
	table: {
		contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
	}
};

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('textarea.tinymce').forEach(el => {
        ClassicEditor.create(el, editorConfig).catch(error => {
            console.error(error);
        });
    });
});
