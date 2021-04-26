import React from 'react';
import ReactDOM from 'react-dom';
import HomePage from './components/HomePage/HomePage';


if (document.getElementById('video-wrap')) {
	const videoWrap = document.getElementById('video-wrap');
	const [video_src, video_id] = [
		videoWrap.getAttribute('src'),
		videoWrap.getAttribute('v_id')
	];

	ReactDOM.render(
		<HomePage 
			videoSrc={video_src} 
			apiURL={`${window.server_url}/${video_id}/annotations`}		
		/>,
		document.getElementById('video-wrap'),
	);
}
