<?php
namespace GDO\YTBest;

use GDO\Comments\GDO_CommentTable;

final class YT_VideoComment extends GDO_CommentTable
{
	
	public function gdoCommentedObjectTable() { return YT_Video::table(); }
	public function gdoAllowFiles() { return false; }
	public function gdoEnabled() { return true; }
	
}
