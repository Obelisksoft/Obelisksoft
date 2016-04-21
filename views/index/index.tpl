<div class="row">

	<div class="col-sm-12">


		<div id="myTabContent1" class="tab-content bg-color-white padding-10">
			{if $_acl->permiso('new_document')}
  				<div class="newposition"><a href="/document/newdocumenttrd/" class="btn btn-success active" role="button">{_("New Document")}</a></div>
			{/if}
			<br>
			
			<div class="tab-pane fade in active" id="s1">
					

				<div class="input-group input-group-lg hidden-mobile">
					<input class="form-control input-lg" type="text" placeholder='{_("Search Again…")}' id="busqueda">
						<div class="input-group-btn">
							<button type="submit" class="btn btn-default">
								&nbsp;&nbsp;&nbsp;<i class="fa fa-fw fa-search fa-lg"></i>&nbsp;&nbsp;&nbsp;
								</button>
						</div>
				</div>
				<div id="resul"></div>
			</div>
		</div>
	</div>
</div>