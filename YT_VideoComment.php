<?php
namespace GDO\YTBest;

use GDO\Comments\GDO_CommentTable;
use GDO\Core\GDO;

final class YT_VideoComment extends GDO_CommentTable
{

	public function gdoCommentedObjectTable(): GDO { return YT_Video::table(); }

	public function gdoAllowFiles(): bool { return false; }

	public function gdoEnabled(): bool { return true; }

}
